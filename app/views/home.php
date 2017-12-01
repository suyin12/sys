<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        :root{          /*结构性伪类选择器*/
            background:#FFFFE7;
        }
        /*body *:not(h1){*/
        /*background-color:limegreen;*/
        /*}*/
        p:first-child{  /*伪元素选择器*/
            color:red;
        }
        p:last-child{
            color:blue;
        }
        p:first-letter{
            font-size:2em;
        }
        td:empty{/*指定当元素内容为空白时*/
            background-color:limegreen;
            content:"no";
        }
        :target{
            background:yellow;
        }
        /*li:nth-child(2n+1){*/
        /*background: yellow;*/
        /*}*/
        /*li:nth-child(2n+2){*/
        /*background: skyblue;*/
        /*}*/
        li:nth-of-type(2){
            background: skyblue;
        }
        /*input[type=tel]::selection{*/
        /*background: #dddd00;*/
        /*}*/
        /*input[type=tel]:disabled{*/
        /*background: #dddd00;*/
        /*}*/
        input[type=tel]:enabled{
            /*background: #dddd00;*/
            /*-webkit-border-radius:10px;*/
            border-radius:8px;
        }
    </style>
</head>
<body>
<h1>111111</h1>
<p>11111111</p>
<p>22222222</p>
<p>33333333</p>
<p>44444444</p>
<table border="1">
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <td>a</td>
        <td></td>
        <td>c</td>
        <td></td>
    </tr>
</table>
<a href="#text1">1</a>
<a href="#text2">2</a>
<a href="#text3">3</a>
<a href="#text4">4</a>
<div id="text1">
    <h2>1</h2>
</div>
<div id="text2">
    <h2>2</h2>
</div>
<div id="text3">
    <h2>3</h2>
</div>
<div id="text4">
    <h2>4</h2>
</div>
<ul>
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
</ul>
<form>
    <input type="tel" pattern="[0-9]+" value="" />
    <input type="submit" value="提交" />
</form>

</body>
</html>
