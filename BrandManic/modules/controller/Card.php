<?php

namespace controller;

class Card {
    public static function loadData($url){
        return self::load($url);
    }

    private static function load($url)
    {
        $result = [
            'code' => -1,
            'data' => '',
        ];

        try {
            if (!(isset($_SESSION['ICdata']) && is_array($_SESSION['ICdata']))) {
                $links = self::extractCSVfromURLtoArray($url);
                $array = [];

                foreach ($links as $actual) {
                    $array[$actual[0]] = self::extractCSVfromURLtoArrayExcelType($actual[1]);
                }

                $_SESSION['ICdata'] = $array;

            }
            $data['arrayKeys'] = array_keys($_SESSION['ICdata']);

                        
            $result['code'] = 1;
            $result['data'] = $data;

        } catch (\Exception $exc) {
            $result['code'] = -1;
            $result['data'] = "";
        }
        
        return $result;
           

    }


    private static function extractCSVfromURLtoArray($csvURL)
    {
        $array = [];
        try {
            $csvData = file_get_contents($csvURL);
            $csvData = strip_tags($csvData);
            $lines = explode(PHP_EOL, $csvData);
            foreach ($lines as $line) {
                $array[] = str_getcsv($line);
            }
        } catch (Exception $e) {
            return [];
        }

        return $array;
    }

    private static function extractCSVfromURLtoArrayExcelType($csvURL)
    {
        $array = [];
        try {
            $csvData = file_get_contents($csvURL);

            $lines = explode(PHP_EOL, $csvData);

            unset($lines[0]);
            foreach ($lines as $line) {

                $tmpArray = str_getcsv($line);
                if (isset($tmpArray[40]) === false) {
                    $a = 0;
                }
                if (count($tmpArray) > 11) {
                    $element = [

                        'uid' => $tmpArray[0],
                        'hoja' => $tmpArray[1],
                        'id' => $tmpArray[2],
                        'Categoria' => $tmpArray[3],
                        'Audiencia Total' => $tmpArray[4],
                        'FechaActualizacion' => $tmpArray[5],
                        'Foto_URL' => $tmpArray[6],
                        'Email' => $tmpArray[7],
                        'TOOLS' => $tmpArray[8],
                        'Nombre' => $tmpArray[9],
                        'Apellidos' => $tmpArray[10],
                        'Genero' => $tmpArray[11],
                        'Edad' => $tmpArray[12],
                        'Pais' => $tmpArray[13],
                        'Región' => $tmpArray[14],
                        'Ciudad' => $tmpArray[15],
                        'Puntuacion' => $tmpArray[16],
                        'Territorios' => $tmpArray[17],
                        'Descripción_Perfil' => $tmpArray[18],
                        'Atributos_de_marca' => $tmpArray[19],
                        'Otras_Metricas' => $tmpArray[20],
                        'Blog_URL' => $tmpArray[21],
                        'UsuariosUnicos' => $tmpArray[22],
                        'TW_name' => $tmpArray[23],
                        'TW_URL' => $tmpArray[24],
                        'TW_Followers' => $tmpArray[25],
                        'TW_engMedio' => $tmpArray[26],
                        'TW_EngageRate' => $tmpArray[27],
                        'FB_name' => $tmpArray[28],
                        'FB_URL' => $tmpArray[29],
                        'FB_Followers' => $tmpArray[30],
                        'FB_engMedio' => $tmpArray[31],
                        'FB_EngageRate' => $tmpArray[32],
                        'IG_name' => $tmpArray[33],
                        'IG_URL' => $tmpArray[34],
                        'IG_Followers' => $tmpArray[35],
                        'IG_engMedio' => $tmpArray[36],
                        'IG_EngageRate' => $tmpArray[37],
                        'YB_name' => $tmpArray[38],
                        'YB_URL' => $tmpArray[39],
                        'YB_Followers' => $tmpArray[40],
                        'YB_engMedio' => $tmpArray[41],
                        'YB_EngageRate' => $tmpArray[42],
                        'LK_name' => $tmpArray[43],
                        'LK_URL' => $tmpArray[44],
                        'LK_Followers' => $tmpArray[45],
                        'LK_engMedio' => $tmpArray[46],
                        'LK_EngageRate' => $tmpArray[47],
                        'ER_Medio' => $tmpArray[48],
                        'EM_Total' => $tmpArray[49],
                    ];
                }

                $array[$element['uid']] = $element;
            }
        } catch (Exception $e) {
            return [];
        }

        return $array;
    }
}