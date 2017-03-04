---
layout: post
title: animation
subtitle: 
date: 2017-03-04 04-Mar-54
author: Lu-Kye
header-img: img/post-bg.jpg
catelog: true
tags: 
  - artist
---
## Software
Player 
     Kinovea

## 单镜动画制作过程

### 1.视频
    找参考或拍摄视频
    分析关键帧
    格式化

### 2.Layout（镜头大纲）
    摆放相机、角色位置
    场景整理
    参数设置

### 3.Maya
    摆放关键帧

## AnimationMentor 在线网上动画学习

## 确定跑步步距
    不移动人物控制器
    确定脚最外面的参照物
    移动重心控制器、脚控制器

## 人物动画 绑定方式 IK\FK 切换
    FK
         正向动力学 根据父关节来计算子关节位置 用于跟随动画
    IK 
         负向动力学 根据末端子关节计算 

## 摆放Pose步骤 （ 动作不要有遮挡 ）
    重心位置判断
    脚的位置、脚步细节
    身体动态线 整体S型 部分C型
    肩部手部(IK)
    膝盖手肘

## Animation Menu
    Create Deformers 调整点(例如做表情)
    Constrain 手和道具 之间的关系

## Skeleton
    Joint Tool 关节工具 创建骨骼

## Skin
    Bind Skin 绑定蒙皮(柔性 刚性)

## 动画制作技巧
    重叠 1，2，3 部分 1 带动 2 带动 3 开始进行动作
    跟随 折回该停止的位置
    拖帧法 循环 view*infinity curves*preinfinity
    指定帧法 中间帧调整
    !!! 视频序列图片导入 !!!
         利用QuickTime导出序列图(导出图片序列TGA/TIFF(带通道))
         // 选择的Camera1 Panel View*ImagePlane*ImportImage(选第一张导入)
         Maya中导出为animation File View Sequence 在打开后的视图 File Save Animation
         选择的Camera1 Panel View*ImagePlane*ImportImage(选第一张导入) (勾上Use Image Sequence)
    切换镜头
         新建maya场景
         下一帧切换
    WWWWW
         Who 角色性格
         Why 
         When
         What
         Where
    黄金分割法构图 5 : 8
    刹车
         关键帧（球的位置）
         润色节奏：最大间距后一帧间距小，一帧间距微小，一帧加大，一帧微小
         旋转：原地转（旋转幅度加大）
         挤压拉伸：五帧挤压 三帧拉伸 两帧挤压 2帧还原

## Short cuts
    P 先选child 在选parent 创建父子关系(中键拖拽)
    shift + P 取消parent
    S 保存当前帧
    鼠标中键 移动帧
    shift 框选 移动帧
    , . 查看帧
    alt + , . 移动帧 every frame
    alt + v 暂停
    edit delete by type static channels 删除没K帧的属性
    Graph Editor
         i长按 插入帧
         小数点归整
    Display Animation Joint Size
    Outline 按住shift 点+号 展开全部
    命令行中选中命令 拖拽到 Custom 上 创建自定义命令

## Curve
    释放权重(改变曲线)
         通过拉伸权重线 改变曲线左右权重 （+ shift）
         加点
