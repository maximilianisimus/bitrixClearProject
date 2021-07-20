<? namespace lib;


class helper
{
    /* активация элемента */
    public function activateElement($id)
    {
        $el = new CIBlockElement;
        $arLoadProductArray = array(
            "ACTIVE" => "Y",
        );
        $res = $el->Update($id, $arLoadProductArray);
    }

    /* деактивация элемета */
    public function deactivateElement($id)
    {
        $el = new CIBlockElement;
        $arLoadProductArray = array(
            "ACTIVE" => "N",
        );
        $res = $el->Update($id, $arLoadProductArray);
    }

    /* логирование */
    public function logToFile($str, $fileName = 'log.txt', $clear = false)
    {
        $file = '/home/bitrix/www/local/tools/' . $fileName . '.txt';
        $current = file_get_contents($file);
        if ($clear) {
            $current = '';
        }

        $current .= $str . "
";

        file_put_contents($file, $current);
    }

}

?>