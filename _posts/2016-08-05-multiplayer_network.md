---
layout: post
title: multiplayer_network
subtitle: 
date: 2017-03-04 02-Mar-43
author: Lu-Kye
header-img: img/unity/multiplayer_network
catelog: true
tags: 
  - unity
---
## Some features
- [Command]  

```csharp
// Send from client to server
[Command]
void CmdDoFire(float lifeTime)
{
    GameObject bullet = (GameObject)Instantiate(
        bulletPrefab, 
        transform.position + transform.right,
        Quaternion.identity);
        
    var bullet2D = bullet.GetComponent<Rigidbody2D>();
    bullet2D.velocity = transform.right * bulletSpeed;
    Destroy(bullet, lifeTime);

    NetworkServer.Spawn(bullet);
}
```
- [SyncVar]

```csharp
class Player : NetworkBehaviour
{

    // Synchronize from server to clients
    // In deep unity codes, will check whether this property is dirty
    [SyncVar(hook="OnHealth")]
    int health;

    public void OnHealth(int health)
    {
        // Do something need to do
    }
}
```
- [SyncList]

```csharp
public class MyScript : NetworkBehaviour
{
    public struct Buf
    {
        public int id;
        public string name;
        public float timer;
    };
            
    // Like SyncVar, from server to clients
    public class TestBufs : SyncListStruct<Buf> {}
    TestBufs m_bufs = new TestBufs();
    
    void BufChanged(Operation op, int itemIndex)
    {
        Debug.Log("buf changed:" + op);
    }
    
    void Start()
    {
        m_bufs.Callback = BufChanged;
    }
}
```
- [ClientRpc]

```csharp
class Player : NetworkBehaviour
{

    [SyncVar]
    int health;

    // Send from servers to servers
    [ClientRpc]
    void RpcDamage(int amount)
    {
        Debug.Log("Took damage:" + amount);
    }

    public void TakeDamage(int amount)
    {
        if (!isServer)
            return;

        health -= amount;
        RpcDamage(amount);
    }
}
```
