## 基本操作流程
    Tool lightbox > Tool 点击选中一个模型tool
    使用选择的模型绘画出一个实例
    按下快捷键 T 进入editor模式

## UV 基本操作流程
    基本操作流程 
    UV Map 确认当前模型是否已经有uv
    Zplugin UV Master 点击work on clone  在低细分模型下进行uv绘画
    如果是从maya 或其他第三方软件中导入已经带有uv的模型 需要选中 UV Master use existing uv seams

## UV Master
    unwrap         展开uv
    unwrap all    展开subtool中显示的所有
    symmetry     展开时对称
    polygroups   按组拆分并展开
    use existing uv seams   允许已经拆分好的进行展开
    enable control painting  激活拆分绘画
          protect    画的地方不被剪切
         attract      画的地方被剪切
         erase        擦出画的地方
         attractfromambientoccl 根据AO/OCC(阴影)状态进行剪切和展开(阴影部分作为切合线)
         density     设置精度  精细刻画的放大 反之放小
    work on clone 拷贝一个精度为1的模型 制作uv
    copy uvs       
    paste uvs
    flatten   
    check seams   显示剪开边线
    clear maps       清楚所有
    load ctrl map    读取
    save ctrl map   保存绘画过程
