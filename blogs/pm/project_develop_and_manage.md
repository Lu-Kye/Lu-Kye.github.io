[LINK](http://bbs.yuqing36524.com/?/article/7)   
   
1、项目研发分类   
   1.1 先做不想（小白）   
   1.2 边做边想（陌生项目）   
   1.3 先想后做（高级开发工程师）   
   1.4 常规迭代详细设计与执行问题反馈（一般团队）   
   1.5 快速迭代详细设计与执行问题反馈（优秀团队）   
   
2、若干重要环节   
   2.1 需求分析与产品设计   
      (人员组成与角色划分、技术可行性分析、目标与里程碑)   
   
   2.2 执行方案评估与目标、里程碑确定   
       目标：从执行层面来看是否能达到产品经理的预期   
       产出：系统架构图、   
             模块功能设计(内嵌/外置)、   
         数据流程图、   
         数据库设计、   
         接口文档(数据依赖、程序模块依赖、接口服务依赖)、   
         里程碑划分与确定   
   
   2.3 近准确排期   
       先按里程碑划分   
       再按模块间依赖划分（组间、时间节点,精确到周或天）   
       再按模块内依赖划分（组内、时间节点,精确到天或小时）   
       留出自我预估时间的0.5倍作为弹性空间。        
   
   2.4 风险管控   
       组间建议按天/周来跟踪   
       组内建议按小时/天来跟踪   
       （延时交付、任务返工）是项目最大的风险   
   
## 项目开发过程中的通用步骤梳理   
[LINK](http://bbs.yuqing36524.com/?/article/8)   
   
一、背景和目标   
鉴于我们的各种开发人员越来越多，个人技术状况参差不齐的状况，故做此项目开发过程中的通用步骤梳理，   
目标有3点：   
(1) 能清楚了解大数据范围内的项目开发全流程。   
(2) 能对个人项目存在的问题题点或别人协同时候的问题点，进行快速定位和问题解决。   
(3) 形成相对统一开发流程规范，方便后续任务的交接、升级等问题的处理。   
二、过程详解   
（1） 项目的结果输出源码相关：包括源代码、配置文件、包依赖   
脚本相关：包括shell、python等。   
说明文档 : 独立成word存档 , 集成于代码中，形成于wiki中。   
（2）步骤详解   
个人将项目开发过程，共分为9步,以具体需求 "周期性，每天获取昨天节目有线电视频道对应的节目单"为例，   
     2.1 代码开发   
           基于面向对象思想，以模块开发、控制器类、业务管理类、工具类、类内方法按流程分块等来实现高内聚 、低耦合的要求。   
     2.2 单元与功能测试   
           单元测试方法、工具类等   
           功能测试主要是功能单元为单位，涉及多个类或方法，以一个功能入口类为启动类。   
     2.3 本地布署测试   
           如果项目本身可以本地布署测试，则进行本地环境的优先测试。并解决出现的问题点。   
     2.4 shell脚本开发   
           由于所做的项目的最终运行环境，均需要在线上的linux环境中。在项目代码开发完成后，均需要结合shell后，最终完成项目的   
           整体开发。   
           如：udf，对代码执行后的清理临时数据文件，对java代码调用时候的输入参数调用   
     2.5  线上布署测试    
            在远程环境中，布署完整的项目，包括shell+源码等全部，   
            使项目本身可以在与持续集成环境几乎一致（比如JDK，Linux版本等环境往往会略有不同）的机器环境中运行，   
            从而最大程度确保在持续集成环境中的机器可以运行成功，减少在持续集成环境下的测试成本。   
     2.6 源码同步(git)   
            经过以上测试通过，说明源码已ok，故此时可以将项目同步到git中，方便团队协作开发和代码review。   
     2.7 项目发布包同步(git)   
            经过以上测试通过，说明项目运行已ok，故此时将项目发布包，涉及到的源码的jar包，shell脚本和其它需要的数据文件等同步至git中，作为以后CI布署时候的分发依据，同时方便团队协作开发和代码review。                 
     2.8 CI布署分发发布包   
            如果项目发布包上传到的git地址，已配置好CI数据分发，则不需要重配置。只需等CI自动更新git的数据后，做自动分发。   
            如果项目发布包上传到的git地址，从未配置过CI数据分发，则需要重新配置。   
                   即将git地址加入新建的CI任务中，并填写相关的脚本，   
                   比如删除已有目录、创建没有的目录、将git下来的数据拷贝至分发进程要拷贝的目录中。   
                   若是需要编译构建的项目如web型项目，则需要写相关的代码build和自定义分发。   
     2.9 任务调度与监控之Jenkins布署   
           由CI布署分发发布包完成后，则项目的发布包已成功分发至各调度入口机中。   
           配置Jenkins 任务，将依赖、定时、启动脚本、报警邮件等配置好后，申请上线。   
           申请上线后可以通过任务管理去运行测试，如有问题，进行迭代测试。    
           没有问题的话，则正式发布完成。   
           但仍需持续观察后边几个周期的执行情况，防止出现与预期不符的情况。   
