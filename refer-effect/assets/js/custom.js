{

    document.addEventListener('DOMContentLoaded', (event) => {           //여러개 보여줄 때
            document.querySelectorAll('pre code').forEach((el) => {
                hljs.highlightElement(el);
            });
    });       

    //modal

    // $(".bottom button").click(function(){
    //     $("#modal").removeClass().addClass("show");      //removeClass를 실행하고, addClass를 실행하라, 콜백함수처럼 반복호출 되는 것
    // });

    document.querySelector(".bottom button").addEventListener("click", function(){
        //document.querySelector("#modal").className = "";      //className을 초기화 시킴
        document.querySelector("#modal").classList.add("show");
        document.querySelector("#modal").classList.remove("hide");
    });

    // $(".modal-cont button").click(function(){
    //     $("#modal").addClass("hide");
    // });

    document.querySelector(".modal-cont button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("hide");
    });

    // document.querySelector(".modal-cont button").addEventListener("click",()=>{
    //     document.querySelector("#modal").classList.add("hide");
    // });
}