
export const ajax = function () {

    console.log("");

    $('.answer_button').on('click', function () {
        let a = $(this);
        console.log(a.attr('title'));
        $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: a.attr('title'), 
          //formのaction要素を参照
          type: "get",  //formのmethod要素を参照
          // data: form.serialize(),     //formで送信している内容を送る
        })
        
          //通信が成功した時
        .done((res) => {
            console.log(res);
            var answer_flag = res.answer_flag;
            var quiz_id = res.quiz_id;
            if (answer_flag == 1) {
                // 正解の場合、クイズIDに基づいて特定のクラスの要素の色を変更
                $(`#clear_${quiz_id}`).removeClass("hidden"); // 動的にクラスを生成
                $(`#notclear_${quiz_id}`).addClass("hidden");
                console.log("正解");
            } else if (answer_flag == 0) {
                // 不正解の場合
                $(`#notclear_${quiz_id}`).removeClass("hidden");
                $(`#clear_${quiz_id}`).addClass("hidden");
                console.log("不正解");
            }
    
        })
          //通信が失敗したとき
        .fail((error) => {
            console.log("失敗");
    
        })
    });
    }

    