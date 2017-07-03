# votesys 投票系统
test
**数据库 votedb**

根据需求 我们分析有3张表

1. 选项表 item 
2. 投票的日志表 vote_log 
3. 过滤ip的表 filter
 
表结构具体见sql.sql文件

**项目的创建**

1. 解压zendframework
2. dos进入刚解压的bin目录 执行命令 `zf.bat create project d:/votedb`
3. 在zend studio 中创建空项目，然后把相关文件考入   
	1.把d:/votedb下所有文件考到项目的根目录下     
	2.在把1步骤解压的library下的Zend目录都考到项目的library里
4. 创建 AdminController 控制器（管理后台的所有请求）