$(document).ready(function() {
    // Handle click events for all 〇 buttons
    $(".maru-label").on(function() {
        let quizId = $(this).attr("for").split("_")[1]; // Extract quiz ID
        // Change color of selected 〇 and reset ✕ for this quiz
        $(`#maru_${quizId}`).prop("checked", true);
        $(`label[for='maru_${quizId}']`).addClass("bg-green-500 text-white");
        $(`label[for='batsu_${quizId}']`).removeClass("bg-red-500 text-white").addClass("bg-red-100 text-red-600");
    });

    // Handle click events for all ✕ buttons
    $(".batsu-label").on(function() {
        let quizId = $(this).attr("for").split("_")[1]; // Extract quiz ID
        // Change color of selected ✕ and reset 〇 for this quiz
        $(`#batsu_${quizId}`).prop("checked", true);
        $(`label[for='batsu_${quizId}']`).addClass("bg-red-500 text-white");
        $(`label[for='maru_${quizId}']`).removeClass("bg-green-500 text-white").addClass("bg-green-100 text-green-600");
    });
});

