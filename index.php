<h1>CSGO Conf Installer</h1>





<h2>Steam Apps Path</h2>
<?php
$steamAppsPath = 'D:/Program Files (x86)/Steam/steamapps/';
print"<b>'$steamAppsPath'</b><br>";
if(!is_dir($steamAppsPath)){
    print("!!! ERROR !!!<br>Path not found!<br>");
    die;
}
$steamAppsPath = dirname($steamAppsPath).'/';
print"<br><br><br>";
?>





<h2>Conf Files</h2>
<?php
function getConfFiles ($path)
{
    $files = [];
    
    $dirContent=scandir($path);
    foreach($dirContent as $obj)
    {
        if($obj==='.' || $obj==='..')
            continue;
        
        
        if(is_file($path.$obj)){
            print"<b>'$path"."$obj'</b><br>";
            $files[] = $path.$obj;
        }
        
        else if(is_dir($path.$obj))
            $files = array_merge($files, getConfFiles($path.$obj."/"));
    }
    
    return $files;
}
$files = getConfFiles("steamapps/");
print"<br><br><br>";
?>





<h2>Install</h2>
<?php
function InstallConfFiles ($steamAppsPath, $files)
{
    foreach($files as $file)
    {
        print"<b>'".basename($file)."'</b><br>";
        
        
        $content = @file_get_contents($file);
        if($content===false){
            print("!!! ERROR !!!<br>FS error!<br>".(error_get_last())['message']);
            die;
        }
        
        
        $targetFile = $steamAppsPath.$file;
        $result = file_put_contents($targetFile, $content);
        if($result===false){
            print("!!! ERROR !!!<br>FS error!<br>".(error_get_last())['message']);
            die;
        }
        
        
        $content = str_replace("<", "&lt;", $content);
        $content = str_replace(">", "&gt;", $content);
        $content = str_replace("\r\n", "\n", $content);
        $content = str_replace("\n\r", "\n", $content);
        $content = str_replace("\r", "", $content);
        $content = str_replace("\n", "<br>", $content);
        print"<div style='max-height:100px;overflow:scroll;border:1px solid #000;padding:10px;width:80%;background-color:#DDD;'>$content</div>";
        print"<br>";
    }
}
InstallConfFiles($steamAppsPath, $files);
print"<br><br><br>";
?>





<h1>Installation Complete!</h1>
print"<br><br><br>";
