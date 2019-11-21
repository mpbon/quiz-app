<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                        <div v-for="question in questions" v-if="question.id === currentQuestion">
                            <div class="">
                                {{ question.question }}
                            </div>
                        </div>

                    </div class="question-card">
                    <div class="card-body">
                        <button type="button" class="btn btn-info hvr-float-shadow" @mouseover="hoverAudio()" @click="selectAnswer(answer)" v-for="answer in answers" v-if="answer.question_id === currentQuestion">
                            {{ answer.choice }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                questions: [
                ],
                answers: [
                ],
                currentQuestion: 1
            }
        },

        methods: {

            fetchQuestions(){
                var self = this;
                axios({
                    method: 'post',
                    url: '/questions'
                }).then(function(response){
                    self.questions = response.data;
                });
            },

            fetchAnswers(){
                var self = this;
                axios({
                    method: 'post',
                    url: '/answers'
                }).then(function(response){
                    self.answers = response.data;
                });
            },

            selectAnswer(answer){
                var question = this.findQuestionById(answer.question_id);
                if (answer.id === question.answer_id){
                    this.currentQuestion++;
                    var audio = new Audio("sounds/correct-sound.mp3");
                    audio.play();
                }
                else {
                    this.currentQuestion++;
                    var audio = new Audio("sounds/incorrect-sound.mp3");
                    audio.play();
                }
            },

            findQuestionById(id){
                return this.questions.filter(function(question){
                    return question.id === id
                })[0];
            },

            hoverAudio() {
              var a = new Audio("sounds/hover-sound.mp3");
              a.play();
            },

        },
        mounted(){
            this.fetchQuestions();
            this.fetchAnswers();
        },
    }
</script>
