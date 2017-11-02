/**
 * Created by lisha on 2017/9/11.
 */
define(['jquery','text!tpls/teacherList.html','template',"teacher/show",'teacher/add'],function($,teacherListTpl,template,show,add){
    return function f3(){
        $('#teachershow').remove();
        $.ajax({
            url:'/api/teacher',
            success:function(data){
                if(data.code!=200){
                    throw new Error(data.msg);
                }

                $('.main .content-container').html(template.render(teacherListTpl,data));
                $('.panel-teacher').on('click','.btn-show',function(){
                    show();
                })
                    .on('click','.btn-addteacher',function(){
                    add();
                })
                    //.on('click','.btn-status',function(){
                    //    $(this).text()
                    //    $.ajax({
                    //        url:'/api/teacher/handle'
                    //    })
                    //})

            }
        })
    }
})