<?php

/* 
 * by Snowy YANG
 * for http://snowy.asia/
 */

$title = '雪鸟幻梦之笼';


function view() {
?>
<style>
p {
	line-height:1.5
}
</style>
<h1>雪鸟幻梦之笼</h1>
<?php
$text = <<<'TEXT'
<b>未完结时的前言</b>
定下雪鸟这个游戏 我开始写这篇小说 然后三次删掉了写好的几千字开始重写
现在的这个状态 我也不敢保证会不会有一天又全部砍掉重写 之前写的内容可以在GitHub翻到
只能说写一步是一步 也许写着写着真的写完了呢 等到真的写完了我就会开始做游戏啦

<b>目录</b>
<a href="#a00">0. 我知道这是梦</a>
1. 最初在梦里听见的音色
2. 执着的雪 随意的风
3. 混乱场
4. 凝想力
5. 遥遥十年 近在咫尺
6. 风止雾浓之时
7. 对美好的生活视而不见
8. 雪鸟幻梦之笼

<b id="a00">0.我知道这是梦</b>
淡淡的光线斜入我的卧室，一种流通感从身体深处传来，我知道这是梦。
带着这样感觉的梦，我已经经历过十年了。
那个人又躲在什么高深的地方吧？
随着这样的感想，我径直走出窗户，在梦境中飞行起来。
其实，倒不如说是梦境引导着我进入下一个场景。
看着街道在身下移动，楼房在两边擦过，我不敢留意太多的细节。
观察梦中的景物，会消耗梦境，简单地说，观察的细节越多，梦就越容易醒来。
闭上眼睛什么都不看的话，梦境会非常缓慢的流逝，伴随着一阵阵的流通感。
我知道这份流通感的源头，那个人，名字的话，似乎是“风”，称呼的时候加上君字，风君。
终于，街道有了镜头，我看到了田野。
我想我接近风君一些了。
最初在梦里经历鸟瞰图都有一种晕眩感，现在已经完全习惯了，再加上梦里经常下雪，所以我才自称雪鸟啊。
这一次的田野并没有被积雪覆盖呢。
我在远方看见了山峦，这一次，梦境的变化也是平常的节奏。
我在山脚停了下来，周围是茂密的竹林，抬头能看见明晃晃的月亮。
仔细想想，最初进入这个梦境的时候，好像还是白天的光线，突然就到了夜晚了。
不过梦境就是变幻莫测才是梦境。
这次不允许我飞行了嘛……
我想快点见到风君，所以没有走山路，而是直接进入竹林。
正如同我所预料的，不常规的操作打破了梦境的进度，竹林瞬间消失了，他站在那里。
我看到他的第一句话，是一直在我心里想的那句——
“我们可以在现实中见面了吧。”
TEXT;
$timestamp = date('Y年n月j日H:i:s', filemtime(__FILE__));
echo "<p>（更新中...最后编辑于${timestamp}）<br><br>";
$lines = explode("\n",$text);
foreach($lines as $l) {
	echo $l;
	echo '<br>';
}
echo "<br>（未完待续...最后编辑于${timestamp}）</p>";
}
