$('#uploadBtn').click(function() {
    $('#uploadFile').click()
    $('#uploadFile').change(function() {
        var formData = new FormData()
        formData.append('image', this.files[0])
        if(formData) {
            $.ajax({
                url: '/admin/photos',
                type: 'POST',
                data: formData,
                async: true,
                cache: false,
                contentType: false,
                processData: false,
                success: function(res) {
                    if(res.status == 0) {
                        alert(res.msg)
                        return false    
                    }
                    $('input[name="img"]').val(res.msg)
                    $('.img-show').attr('src', res.msg)
                }
            })
        }
    })
})

// var curPage = 1;
// var pageSize = 10;
// var type = "公司新闻";
// $(function () {
//     findCompanyModel();
//     findNavModels();
//     findNewsModels();
//     layui.use(['laypage'], function() {
//         var laypage = layui.laypage;

//         laypage.render({
//             elem: 'page'
//             , count: getCount(type)
//             , layout: ['count', 'prev', 'page', 'next', 'limit', 'refresh', 'skip']
//             , jump: function (obj) {
//                 curPage = obj.curr;
//                 pageSize = obj.limit;
//                 findNewsModels();
//             }
//         });
//     });
// });

// function getCount(data) {
//     let tokenHead = sessionStorage.getItem("tokenHead");
//     let access_token = sessionStorage.getItem("access_token");
//     let token = tokenHead +" "+ access_token;
//     var count = 0;
//     $.ajax({
//         url: 'http://localhost:8080/front/news/count',//地址：访问后台的地址
//         data: {type:data},//前端传递给后台的数据
//         type: 'post',
//         async: false,
//         dataType: 'json',
//         beforeSend: function(request) {
//             request.setRequestHeader("Authorization", token);
//         },//是后端传递到前端的数据格式
//         success: function (data) {//后端给前端的一个反馈
//             count = data;
//         }
//     });
//     return count;
// }

// function findCompanyModel(){
//     let tokenHead = sessionStorage.getItem("tokenHead");
//     let access_token = sessionStorage.getItem("access_token");
//     let token = tokenHead +" "+ access_token;
//     $.ajax({
//         url: 'http://localhost:8080/front/company/findById',
//         data: {id: 1},
//         type: 'post',
//         dataType: 'json',
//         beforeSend: function(request) {
//             request.setRequestHeader("Authorization", token);
//         },
//         success: function (data) {
//             console.log(data);
//             setCompanyData(data);
//         }
//     });
// };

// function setCompanyData(data) {
//     $("#title").html(data.nameCN);
//     $("#nameCN").html(data.nameCN);
//     $("#nameEN").html(data.nameEN);
//     $("#number").html(data.number);
//     $("#logo").html('<img src="'+ data.logo +'" height="45" width="45">');
//     $("#time").html(data.time);
//     $("#slogan_cn01").html(data.sloganCN_01);
//     $("#slogan_cn02").html(data.sloganCN_02);
//     $("#slogan_en01").html(data.sloganEN_01);
//     $("#slogan_en02").html(data.sloganEN_02);
//     $("#companyTitle").html(data.title);
//     $("#companyImg").html('<img src="'+ data.img_2 +'" width="400" height="200">');
//     $("#content").html(data.text);
// }

// function findNavModels() {
//     let tokenHead = sessionStorage.getItem("tokenHead");
//     let access_token = sessionStorage.getItem("access_token");
//     let token = tokenHead +" "+ access_token;
//     $.ajax({
//         url: 'http://localhost:8080/front/nav/findAll',
//         data: {},
//         type: 'get',
//         dataType: 'json',
//         beforeSend: function(request) {
//             request.setRequestHeader("Authorization", token);
//         },
//         success: function (data) {
//             console.log(data);
//             setNavData(data);
//         }
//     });
// }

// function setNavData(data) {
//     var html="";
//     for(var i = 0;i<data.length;i++){
//         html +='<a href="'+ data[i].href +'">'+ data[i].title +'</a>';
//     }
//     $("#nav").html(html);
//     $("#footNav").html(html);
// }

// function getSearchData(){
//     return {
//         curPage: curPage,
//         pageSize: pageSize,
//         type: type,
//     }
// }

// function findNewsModels() {
//     let tokenHead = sessionStorage.getItem("tokenHead");
//     let access_token = sessionStorage.getItem("access_token");
//     let token = tokenHead +" "+ access_token;
//     $.ajax({
//         url: 'http://localhost:8080/front/news/findAllByGroup',
//         data: getSearchData(),
//         type: 'get',
//         dataType: 'json',
//         beforeSend: function(request) {
//             request.setRequestHeader("Authorization", token);
//         },
//         success: function (data) {
//             console.log(data);
//             setNewsData(data);
//         }
//     });
// }

// function setId(data) {
//     console.log(data);
//     sessionStorage.setItem("newsId",data);
// }

// function setNewsData(data) {
//     var html="";
//     for(var i = 0;i<data.length;i++){
//         html +='                <div>\n' +
//             '                    <div>'+data[i].type+'</div>\n' +
//             '                    <div onclick="setId('+data[i].id+')"><a href="../html/newsdetail.html">'+data[i].name+'</a><span>'+setStatus(data[i].status)+'</span></div>\n' +
//             '                    <div>'+data[i].date+'</div>\n' +
//             '                </div>';
//     }
//     $("#news_titles").html(html);
// }

// function select_news_type(obj) {
//     type = $(obj).html();
//     findNewsModels(type);
// }

// function setStatus(data){
//     if(data==3){
//         return '<img src="../img/top.png" width="30" height="30"/>';
//     }
//     if(data==2){
//         return '<img src="../img/recommend.png" height="30" width="30"/>';
//     }
//     if(data==1){
//         return "";
//     }
// }