<?php
$h2 = '料理配方';
$nav = '常用料理 | <a href="AllCooking">所有料理</a>';

require 'data/cooking.php';

function mainview() {
    global $recipe2;
    echo '刺身拼盘盖饭 大伤+2 魔攻+2 生命+35 魔法+25';
    Detail($recipe2['刺身拼盘盖饭'], 'open');
    echo '开心点心套餐 大伤+2 保护+1 幸运+30 敏捷+25';
    Detail($recipe2['开心点心套餐'], 'open');
    echo '鲁宾三明治 防御+3 保护+2 魔防+3 魔保+1';
    Detail($recipe2['鲁宾三明治'], 'open');
    echo '酸梅 力量+40 敏捷+25 防御+1';
    Detail($recipe2['酸梅'], 'open');
    echo '蓝莓酸奶 魔法+65 防御+2 敏捷+25';
    Detail($recipe2['蓝莓酸奶'], 'open');
}