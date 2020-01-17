
<?php



// if(!function_exists('dd')){
//   function dd($data){

//     echo '<div style="background:#222; padding:10px;"><h5 style="color:#fff">Semangat BosQ :)</h5><hr><pre style="color:#fff">' . var_export($data, true) . '</pre></div>';
//     die;

//   }

// }

function importCTRL($path) {
    
     static $controllers = array();

    
    if(!isset($controllers[$path])) {
    
        $parts = preg_split("~/~", $path, -1, PREG_SPLIT_NO_EMPTY);
        $c = ucfirst(array_pop($parts));
        $file = APPPATH .'/controllers/'. implode('/', $parts) .'/'. ($c) . EXT;
        $error = "Could not load controller ";
    
        if(file_exists($file)) {
            require_once $file;
        
            if(!class_exists($c, FALSE)) {
                throw new Exception($error);
            }        

            $controllers[$path] = new $c;
        
        } else {
            throw new Exception($error);
        }
    }
    
    return $controllers[$path];
}