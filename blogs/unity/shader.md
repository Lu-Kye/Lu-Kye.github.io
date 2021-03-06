## Pragma
```
target 2.0(Direct3D Shader Model 2.0) textures max num 7
target 3.0(Direct3D Shader Model 3.0) textures max num > 7
```

## Unity internal cg functions
Unity/Editor/Data/CGIncludes(UnityCG.cginc、Lighting.cginc...)

## Unity internal structs 
```
struct appdata_base {
	float4 vertex : POSITION;
	float3 normal : NORMAL;
	float4 texcoord : TEXCOORD0;
	UNITY_INSTANCE_ID
};

struct appdata_tan {
	float4 vertex : POSITION;
	float4 tangent : TANGENT;
	float3 normal : NORMAL;
	float4 texcoord : TEXCOORD0;
	UNITY_INSTANCE_ID
};

struct appdata_full {
	float4 vertex : POSITION;
	float4 tangent : TANGENT;
	float3 normal : NORMAL;
	float4 texcoord : TEXCOORD0;
	float4 texcoord1 : TEXCOORD1;
	float4 texcoord2 : TEXCOORD2;
	float4 texcoord3 : TEXCOORD3;
#if defined(SHADER_API_XBOX360)
	half4 texcoord4 : TEXCOORD4;
	half4 texcoord5 : TEXCOORD5;
#endif
	fixed4 color : COLOR;
	UNITY_INSTANCE_ID
};

struct appdata_img
{
	float4 vertex : POSITION;
	half2 texcoord : TEXCOORD0;
};
```

## 内置宏Marcos

## 着色器Properties块中
```
如_MainTex (“Base (RGB)”, 2D) = “white” {}
_MainTex 变量名
“Base (RGB)” Editor 中 Inspector 上的名称
2D 变量类型
“white” {} 默认值

_MyColor ("Some Color", Color) = (1,1,1,1) 
_MyVector ("Some Vector", Vector) = (0,0,0,0) 
_MyFloat ("My float", Float) = 0.5 
_MyTexture ("Texture", 2D) = "white" {} 
_MyCubemap ("Cubemap", CUBE) = "" {} 
```

## 光照模型
```
Half Lambert : difLight 0.5 + 0.5
BRDF（双向反射分布函数）（用途：透明泡泡，边缘高光，盾牌效果，卡通边缘线）
使用2D渐变纹理
表面法向量 s.Normal
使用观察方向 viewDir
float rimLight = dot(s.Normal, viewDir)
float3 ramp = tex2D(_RampTex, float2(hLambert, rimLight)).rgb
```

## 法线贴图 App: CrazyBump、N2DO、Zbrush、Mudbox
```
通过高多边形模型or高度图 生成法线贴图
存储在RGB图片中，RGB分量 代表 XYZ
Unity 提供提取法线信息方法 UnpackNormal(tex2D(_NormalTex, IN.uv_NormalTex))
```

## glsl
```
GLSLPROGRAM ~ ENDGLSL
```

## cg/hlsl
```
CGPROGRAM ~ ENDCG
```

## Tags
```
Queue(渲染队列 unity渲染时机控制): Background(1000), Geometry(2000), AlphaTest(2450), Transparent(3000), Overlay(4000)
RenderType: Opaque, Transparent, TransparentCutout, Background, Overlay
IgnoreProjector: “True” “False"
```

## Pass
```
Name (大写!): 可以在别的shader中引用该Pass  (Name “TEST" UsePass “ShaderTest/Test”)
```

