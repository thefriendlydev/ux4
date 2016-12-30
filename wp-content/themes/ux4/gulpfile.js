var gulp = require('gulp')
var concat = require('gulp-concat')
var minifycss = require('gulp-minify-css')
var autoprefixer = require('gulp-autoprefixer')
var plumber = require('gulp-plumber')
var stylus = require('gulp-stylus')
var rename = require('gulp-rename')
var sourcemaps = require('gulp-sourcemaps')
var ngAnnotate = require('gulp-ng-annotate')
var rev = require('gulp-rev')
var revCollector = require('gulp-rev-collector')
var revDel = require('rev-del')
var runSequence = require('run-sequence')
var templateCache = require('gulp-angular-templatecache')

var vendorJs = [
  'bower_components/angular/angular.js',
  'bower_components/angular-ui-router/release/angular-ui-router.js',
  'bower_components/angular-sanitize/angular-sanitize.js',
  'vendor/ngDialog/js/ngDialog.js',
  'bower_components/angular-touch/angular-touch.js',
  'bower_components/angular-animate/angular-animate.js',
  'bower_components/jquery/dist/jquery.min.js',
  'bower_components/lodash/lodash.js',
  'bower_components/matchHeight/dist/jquery.matchHeight.js'
]

var vendorCss = [
  'vendor/ngDialog/css/ngDialog.css',
  'vendor/ngDialog/css/ngDialog-theme-default.css',
  'vendor/ngDialog/css/ngDialog-theme-plain.css',
  'bower_components/animate.css/animate.css',
  'bower_components/twg-frontend-scaffolding/dist/_scaffolding.styl',
  'bower_components/loaders.css/loaders.css'
]

gulp.task('templates', function() {
  return gulp.src('./assets/js/templates/**/*.html')
    .pipe(plumber())
    .pipe(templateCache({standalone: true}))
    .pipe(gulp.dest('./revisions'))
})

gulp.task('vendor-css', function () {
  return gulp.src(vendorCss)
    .pipe(plumber())
    .pipe(gulp.dest('./assets/styl/initializers'))
})

gulp.task('css', function () {
  return gulp.src('./assets/styl/application.styl')
    .pipe(plumber())
    .pipe(stylus({
      'include css': true
    }))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(minifycss())
    .pipe(gulp.dest('./revisions'))
})

gulp.task('js', function () {
  var src = ['./assets/js/**/*.js']

  return gulp.src(vendorJs.concat(src))
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(ngAnnotate())
    .pipe(concat('application.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./revisions'))
})

gulp.task('images', function () {
  return gulp.src('./assets/img/**/*')
    .pipe(plumber())
    .pipe(gulp.dest('./dist/img'))
})

// Icomoon
// copy necessary icomoon assets into dist folder
gulp.task('icons', function() {
  gulp.src('./assets/icons/icomoon/style.css')
    .pipe(rename('_icons.styl'))
    .pipe(gulp.dest('./assets/styl/initializers/'))

  gulp.src('./assets/icons/icomoon/fonts/**/*')
    .pipe(gulp.dest('./dist/fonts/'))
})

gulp.task('states', function () {
  return gulp.src('./assets/js/states/**/*.html')
    .pipe(plumber())
    .pipe(gulp.dest('./states'))
})

/**
 * Revision all asset files and
 * write a manifest file
 */
gulp.task('revision', function () {
  return gulp.src(['./revisions/**/*'])
    .pipe(rev())
    .pipe(gulp.dest('./dist'))
    .pipe(rev.manifest())
    .pipe(revDel({ dest: './dist' }))
    .pipe(gulp.dest('./dist'))
})

gulp.task('default', function (callback) {
  runSequence('build', 'watch', callback)
})

gulp.task('build', function (callback) {
  runSequence('states', 'templates', 'icons', 'vendor-css', 'css', 'js', 'images', 'revision', callback)
})


gulp.task('watch', function () {
  gulp.watch(vendorCss, ['default'])
  gulp.watch(['./assets/styl/**/*.styl', '!./assets/styl/initializers/_icons.styl', '!./assets/styl/initializers/_scaffolding.styl'], ['default'])
  gulp.watch(['./assets/js/**/*.js', vendorJs], ['default'])
  gulp.watch('./assets/**/*.php', ['default'])
  gulp.watch('./assets/icons/**/*', ['default'])
  gulp.watch('./assets/js/states/**/*.html', ['default'])
  gulp.watch('./assets/img/**/*', ['default'])
  gulp.watch('./assets/js/templates/**/*', ['default'])
})
