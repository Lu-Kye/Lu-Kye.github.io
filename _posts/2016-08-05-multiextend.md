---
layout: post
title: multiextend
subtitle: 
date: 2017-03-04 03-Mar-49
author: Lu-Kye
header-img: img/post-bg.jpg
catelog: true
tags: 
  - csharp
---
## Example
```csharp
public interface ILKUICell
{
}

public static class ILKUICellExtend
{
	/// <summary>
	/// Interface init
	/// </summary>
	public static void IInit<T>(this T instance) 
		where T : Component, ILKUICell
	{
		var panel = instance.GetComponent<UIPanel>();
		if (panel == null)
			return;
		GameObject.Destroy(panel);
	}
}
```
