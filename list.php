<!DOCTYPE HTML>
<?php include ("bts.html"); 
?>
<!-- container -->	
 <div class="container" >
	
	
<?
mb_internal_encoding('UTF-8');
setlocale(LC_ALL, 'ru_RU.UTF-8', 'rus', 'Russian');

function filesize_formatted($path)
{
    $size = filesize($path);
    $units = array('байт', 'КБ', 'МБ', 'ГБ');
    $power = $size > 0 ? floor(log($size, 1024)) : 0;
    return number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
}

$uploaddir="D:\Dropbox\\";	

if ($handle = opendir($uploaddir)) {	
echo "<h1>Файлы в папке пользователя </h1><br>";
echo "<table class ='table table-bordered table-hover table-striped'>
	<thead>
			<th width='25%'>Файл</th>
			<th>Размер</th>
			<th>Тип файла</th>
			<th width='15%'>Время изменения</th>
			<th width='5%'>Загрузить</th>
			<th width='5%'>Ссылка</th>
	</thead>";
    /* Именно этот способ чтения элементов каталога является правильным. */
    while (false !== ($file = readdir($handle))) {		
		$extfile = $uploaddir;
		$extfile .=$file;
		//echo $extfile;
		if ($file != "." && $file != "..") {
			echo "		
			<tr>
				<td>". iconv("Windows-1251", "UTF-8", $file) ."</td>
					<td>". filesize_formatted($extfile)."</td>
				<td>". mime_content_type($extfile)."</td>
				<td>". strftime ("%c", filemtime($extfile)) ."</td>
				<td><a href=''><span class='glyphicon glyphicon-download'></span></a></td>
				<td><a href=''><span class='glyphicon glyphicon-link'></span></a></td>
				
			</tr>";
		}
	}
	
    closedir($handle); 
	echo "</table>";}
	
	// <td>". date ("j F Y, g:i a", filemtime($extfile)) ."</td> - альт. строка вывода даты изменения
?>

	</div><!-- container -->
 </body>
</html>
