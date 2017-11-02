/**
 * Created by lisha on 2017/9/11.
 */
define(['jquery','text!tpls/teacherShow.html','template'],function($,teacherListTpl,template){
    return function(){
        //$('#teachershow').remove();


            $.ajax({
                url:'/api/teacher/view',
                data:{
                    tc_id:$(this).parent().attr('tc_id')
                },success:function(data){
                    console.log(data);
                    var html=template.render(teacherListTpl,data);
                    console.log(html);
                    //var hehe='<h1>nihi</h1>'
                    $(html).modal('hide');
                    $(html).appendTo('body').modal().on('hidden.bs.modal',function(){
                        $(this).remove();
                    });
                }
            })

    }
})

