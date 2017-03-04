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
