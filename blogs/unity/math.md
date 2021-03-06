## 1. 2D Vectors
```
a. 平移
b. 旋转 { (cos, -sin), (sin, cos) }
c. 缩放
2D 变换矩阵组合 (by 齐次 to 3D 变换矩阵)
a. 平移 { (1, 0, Tx), (0, 1, Ty), (0, 0, 1) }
齐次表示
(x, y) => (x, y, 1)
{(1, 0, Tx), (0, 1, Ty), (0, 0, 0)}
```

## 2. 逆矩阵
```
a. 矩阵转置
b. 如平移矩阵 改变平移参数符号，旋转矩阵 改变sin项符号
```

## 投影 在投影坐标轴方向上的缩放为0

## 3. 反射 reflection - 负缩放

## 4. 错切 shear - { (1, SHx, 0), (0, 1, 0), (0, 0, 1) }

## 5. 光栅操作 raster operation - 控制矩形像素数组
```
a. OpenGL API
    Copy像素颜色块 glCopyPixels(xmin, ymin, width, height, GL_RGB)
    读取保存像素颜色块 (into colorArray)
    glReadPixels(xmin, ymin, width, height, GL_RGB, GL_UNSIGNED_BYTE, colorArray)
    放入缓存 glDrawPixels
    2D缩放 glPixelZoom
```

## 6. 3D Vectors
```
a. 平移 { (1, 0, 0, Tx), (0, 1, 0, Ty), (0, 0, 1, Tz), (0, 0, 0, 1) }
b. 旋转 绕z轴 { (cos, -sin, 0, 0), (sin, cos, 0, 0), (0, 0, 1, 0), (0, 0, 0, 1) }
```

## 7. 四元数 q = (s, v), s标量部 scalar part, v向量部 vector part
```
s = cos(θ/2), v = usin(θ/2)
θ为旋转角度, u为所选旋转轴单位向量
a. 四元数构造 (cos(θ/2), usin(θ/2))
b. 对点进行旋转 P’ = q(0, P)(q-1 q的共轭四元数)
```

## 8. 2D观察
```
a. OpenGL GLU, GLUT
    GLU gluOrtho2D 定义一个2D裁剪窗口
    GLUT(GLUT显示窗口)  glutInit 初始化 glutWindowPosition
b. 裁剪算法 用于 - 反走样、实体建模法构造对象、移动复制擦除部分图像
    2维点裁剪 Xmin <= x <= Xmax && Ymin <= y <= Ymax
```

## 9. 3D观察
```
a. 投影、透视投影(距离远的小)
b. 深度提示(根据距离改变亮度)
c. 可见线和可见面的判定(醒目显示可见线、用虚线or颜色来区分可见 非可见)
d. 面绘制(根据光照、表面信息绘制表面)
e. 拆散和剖切面视图(层次结构方式)
f. uvn观察坐标系统
```

## 10. 光照模型与面绘制算法
```
a. 辐射强度衰减(系数 + 距离)
b. 方向光源和投射效果
c. 扩展光源和Warn模型
d. 表面光照效果
e. 镜面反射参数Ns
```
