require.config({
    baseUrl:'js',
    paths:{
        jquery:'lib/jquery-2.1.4',
        bootstrap:'../assets/bootstrap/js/bootstrap',
        cookie:'lib/jquery.cookie',
        text:'lib/text',
        template:'lib/template-web',
        tpls:'../tpls'
    },
    shim:{
        bootstrap:{
            deps:['jquery']
        }
    }
})
require(['jquery','text!tpls/teacherList.html','template','teacher/teacherList','cookie','bootstrap'],function($,teacherListTpl,template,teacherList){
    var info=$.cookie('userMessage');

    //var message=JSON.parse(localStorage.getItem('userMessage'))
    if(!info){
        location.href='login.html';
    }
    var message=JSON.parse(info);
    $('.profile img').attr('src',message.tc_avatar);
    $('.profile h3').html(message.tc_name);
    $('.list-group').on('click','a',function(){
        $(this).addClass('active').siblings().removeClass('active');
        var info=$(this).attr('item');
        //console.log(info)
        switch(info){
            case 'teacher':
                teacherList();
                break;
            case 'course':
                $('.main .content-container').html(info);
                break;
            case 'catogory':
                $('.main .content-container').html(info);
                break;
            case 'diagram':
                $('.main .content-container').html(info);
                break;
        }
    })
    $('.list-group a[item=teacher]').trigger('click');

})
