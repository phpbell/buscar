<?php
$title='Buscar';
$desc='Formulário de busca em diversos sites';
$arr=require 'buscas.php';
$sites=null;
foreach ($arr as $key => $value) {
    $sites.='1. '.$key.PHP_EOL;
}
$content=<<<heredoc
# {$title}
{$desc}

## Sites
{$sites}
heredoc;
$filename='README.md';
if(file_put_contents($filename,$content)){
    print 'arquivo README.md gerado'.PHP_EOL;
}else{
    print 'erro ao gerar o arquivo README.md'.PHP_EOL;
}
?>
