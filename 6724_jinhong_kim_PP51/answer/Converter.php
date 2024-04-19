<?php
    class Converter
    {
        public $targetText = "";    

        /*反転させる関数*/
        public function reverce ($targetText) {
            $this->targetText = strrev($targetText);
            return $this->characters;
        }
    }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Converter インスタンスを作成、フォームに入力された文字を反転して表示
        $obj = new Converter();
        echo $obj->reverce($_POST["characters"]);
        exit;
    }
?>
<form action="" method="post">
<input type="text" name="characters" placeholder="ここに文字列を入力"><br>
<button>送信</button>
</form>
