layui.use(['form', 'layer','jquery','upload'],
    function() {
        $ = layui.jquery;
        var form = layui.form,
            layer = layui.layer;
        var upload = layui.upload;

        //执行实例
        var uploadInst = upload.render({
            elem: '#L_href' //绑定元素
            , url: 'http://localhost:8080/uploadFile' //上传接口
            , done: function (res) {
                //上传完毕回调
                console.log(res);
                sessionStorage.setItem("url", res[0]);
                $("#showImg").attr("src", res[0]);
            }
            , error: function () {
                //请求异常回调
            }
        });
        //监听提交
        form.on('submit(add)',
            function(data) {
                data=data.field;
                data.url=sessionStorage.getItem("url");
                data.describe= editor.txt.html();
                console.log(data);
                let tokenHead = sessionStorage.getItem("tokenHead");
                let access_token = sessionStorage.getItem("access_token");
                let token = tokenHead +" "+ access_token;
                $.ajax({
                    url: 'http://localhost:8080/back/product/add',//地址：访问后台的地址
                    data: data,//前端传递给后台的数据
                    type: 'post',
                    dataType: 'json',//是后端传递到前端的数据格式
                    beforeSend: function(request) {
                        request.setRequestHeader("Authorization", token);
                    },
                    xhrFields: {
                        withCredentials: true // 发送Ajax时，Request header中会带上 Cookie 信息。
                    },
                    success: function (data) {//后端给前端的一个反馈
                        data = data.data;
                        console.log(data);
                        if (data == "success") {
                            //发异步，把数据提交给php
                            layer.alert("增加成功", {
                                    icon: 6
                                },
                                function () {
                                    //关闭当前frame
                                    xadmin.close();

                                    // 可以对父窗口进行刷新
                                    xadmin.father_reload();
                                });
                        } else {
                            layer.alert("增加失败", {
                                icon: 1
                            });
                        }
                    }
                });
                //发异步，把数据提交给php
                return false;
            });

    });