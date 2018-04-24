
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>News</title>
</head>
<body>

<?php
class News
{
    private $title;
    private $date;
    private $content;
    
    public function __construct($title, $date, $content)
    {
        $this-> title = $title;
        $this-> date = $date;
        $this-> content = $content;
     
    }
    public function createNews()
    {
        echo "Что случилось: ".$this->title."<br><br>";
        echo "Дата: ".$this->date."<br><br>";
        echo "Новость: ".$this->content."<br><br>";
    }
}

$news1 = new News ('Заголовок', 'Как давно', 'Содержимое');
$news1->createNews();

?>
</body>
</html>