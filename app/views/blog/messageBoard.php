<?php include('header.php');?>
<section id="areaBoard">
    <h2>****</h2>
    <form action="" method="post">
        <div id="board">
            <textarea rows="13" cols="150" placeholder="说点啥?" autofocus></textarea>
        </div>
        <input type="submit" value="留言">
    </form>
</section>

<section id="messageBoard">
    <div>
        <img id="img" src="/images/头像.jpg">qq或者微信昵称<br />
        <p style="text-indent:2em;">关于php函数isset(),检测变量是否设置,变量不存在、unset()掉的变量或者为null的变量返回false,
            其他情况返回true,且只能用于变量，传递任何其它参数都将造成解析错误。
            变量名字是区分大小写的$name $Name $NAME(变量名只能由字母或下划线开头,别问为什么,约定)
            ,但是内置的PHP函数是不区分大小写的echo Echo ECHO phpinfo() Phpinfo() PhpInfo() PHPINFO()
        </p>
        <p style="float:right;"><a href="#">回复</a>&nbsp;&nbsp;&nbsp;<a href="#">赞</a>&nbsp;&nbsp;&nbsp;<?php echo date('Y-m-d H:i:s',time());?></p>
        <hr style="width:99%"/>
    </div>
    <div>
        <img id="img" src="/images/头像.jpg">qq或者微信昵称<br />
        <p style="text-indent:2em;">
            func_get_args();
            func_num_args();
            人生百年，没有太多的时间可以挥霍，都说幸福如饮水，冷暖自知，有些人，每天都在追逐幸福的路上，
            却从来也没有感觉到幸福的存在；有些人，懂得收集点滴的温暖和感动，便会与快乐同行。</p>
        <p style="float:right;"><a href="#">回复</a>&nbsp;&nbsp;&nbsp;<a href="#">赞</a>&nbsp;&nbsp;&nbsp;<?php echo date('Y-m-d H:i:s',time());?></p>
        <hr style="width:99%"/>
    </div>
    <div>
        <img id="img" src="/images/头像.jpg">qq或者微信昵称<br />
        <p style="text-indent:2em;">人生百年，没有太多的时间可以挥霍，都说幸福如饮水，冷暖自知，有些人，每天都在追逐幸福的路上，
            却从来也没有感觉到幸福的存在；有些人，懂得收集点滴的温暖和感动，便会与快乐同行。
        </p>
        <p style="float:right;"><a href="#">回复</a>&nbsp;&nbsp;&nbsp;<a href="#">赞</a>&nbsp;&nbsp;&nbsp;<?php echo date('Y-m-d H:i:s',time());?></p>
        <hr style="width:99%"/>
    </div>
    <div>
        <img id="img" src="/images/头像.jpg">qq或者微信昵称<br />
        <p style="text-indent:2em;">php数组与数据结构,堆栈与队列,堆栈属于先进后出原则(array_push(),array_pop()可以实现),队列属于先进先出原则(array_shift()可以实现)</p>
        <p style="float:right;"><a href="#">回复</a>&nbsp;&nbsp;&nbsp;<a href="#">赞</a>&nbsp;&nbsp;&nbsp;<?php echo date('Y-m-d H:i:s',time());?></p>
        <hr style="width:99%"/>
    </div>
    <div>
        <img id="img" src="/images/头像.jpg">qq或者微信昵称<br />
        <p style="text-indent:2em;">构造方法与析构方法,构造方法是在对象创建完成后第一个被对
            象自动调用的方法;析构方法是在对象被销毁之前最后一个被对象自动调用的方法.
        </p>
        <p style="float:right;"><a href="#">回复</a>&nbsp;&nbsp;&nbsp;<a href="#">赞</a>&nbsp;&nbsp;&nbsp;<?php echo date('Y-m-d H:i:s',time());?></p>
        <hr style="width:99%"/>
    </div>
    <div>
        <img id="img" src="/images/头像.jpg">qq或者微信昵称<br />
        <p style="text-indent:2em;">在面向对象编程当中,类是一个独立的程序单位,是具有相同属性和服务的一组对象的集合.它为属于该类的所有对象提供了统一抽象描述,其内部包括成员属性和服务的方法两个部分.
        </p>
        <p style="float:right;"><a href="#">回复</a>&nbsp;&nbsp;&nbsp;<a href="#">赞</a>&nbsp;&nbsp;&nbsp;<?php echo date('Y-m-d H:i:s',time());?></p>
        <hr style="width:99%"/>
    </div>
    <div>
        <img id="img" src="/images/头像.jpg">qq或者微信昵称<br />
        <p style="text-indent:2em;">使用final标识的类不能被继承,使用final关键字标识的方法,不能被继承.
        </p>
        <ol>
            <li title="可用的表情：【:),/wx,微笑】"></li>
        </ol>
        <p style="float:right;"><a href="#">回复</a>&nbsp;&nbsp;&nbsp;<a href="#">赞</a>&nbsp;&nbsp;&nbsp;<?php echo date('Y-m-d H:i:s',time());?></p>
        <hr style="width:99%"/>
    </div>
</section>
<?php include('footer.php');?>
