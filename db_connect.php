<?php
$link = mysql_connect('localhost','root','');
if (!link) {
   die('接続失敗です。'.mysql_error());
} else {
   echo '接続に成功しました。'; 
}

$db_selected = mysql_select_db('team8',$link);
if (!$db_selected) {
    die('データベース選択失敗です。'.msql_error());
} else {
    echo 'データーベースの選択に成功しました。';
}

mysql_set_charset('utf8');

$result = mysql_query('SELECT id,login_id FROM user');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    print('id='.$row['id']);
    print(',name='.$row['login_id']);
}