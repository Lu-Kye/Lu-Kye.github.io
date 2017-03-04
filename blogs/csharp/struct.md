## implicit operator
```csharp
Define : public static implicit operator double(Digit d) { return d.val; }
Use    : Digit dig = new Digit(7); double num = dig;
```

## generic cannot return null
```csharp
solution : public T Get<T>() where T : class
```
