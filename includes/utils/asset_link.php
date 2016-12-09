<?php
class AssetLink {

  public static function manifest_url($asset) {
    $manifest = get_template_directory() . '/dist/rev-manifest.json';
    if(file_exists($manifest)) {
      $content = file_get_contents($manifest);
      $json = json_decode($content, true);
      if(array_key_exists($asset, $json)) {
        echo $json[$asset];
      }else{
        return false;
      }
    }
  }

}
