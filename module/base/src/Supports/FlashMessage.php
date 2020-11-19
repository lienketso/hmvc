<?php


namespace Base\Supports;


use Illuminate\Support\Facades\Session;

class FlashMessage
{
    public static function renderMessage($mess='create'){
        $m = convert_flash_message($mess);
        $html = '';
        if(Session::has($mess)){
            $html = '<div class="alert alert-success alert-dismissible fade show" role="alert">'.$m.'
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
					</button>
					</div>';
        }
    }

    public static function returnMessage($mess){
        $m = convert_flash_message($mess);
        return [
            $mess=>$m
        ];
    }

}
