<?php

class Common {


    public static function keywordTypeFormat($keyword){

        switch ($keyword->type){
            case 'message':
                return 'Tin Nhắn';
            case 'comment':
                return 'Bình Luận';
            case 'birthday':
                return 'Chúc Mừng Sinh Nhật';
            default :
                return 'Tin Nhắn Hẹn Giờ';
        }

    }
}