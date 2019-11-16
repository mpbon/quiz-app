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

                    </div>
                    <div class="card-body">

                        <div v-for="answer in answers" v-if="answer.question_id === currentQuestion">
                            <div class="">
                                {{ answer.choice }}
                            </div>
                        </div>

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
            }
        },
        mounted(){
            this.fetchQuestions();
            this.fetchAnswers();
        },
    }
</script>
