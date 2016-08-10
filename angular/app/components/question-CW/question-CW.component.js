class QuestionCWController{
    constructor(API, ToastService) {
        'ngInject';

        this.API = API;
        this.ToastService = ToastService;
        this.questions = [];

    }
    $onInit(){

        this.getQuestions();
    }

    getQuestions(){
        this.API.all('list-questions').get('')
            .then((response) => {
            this.questions = response.data;
    });
    }

    submit(){
        var data = {
            activity: this.activity,
            problem: this.problem,
            option: this.option,
        };

        this.API.all('questions').post(data).then((response) => {
            this.ToastService.show('question added successfully');
    });
        this.getQuestions();
    }

    delete(id){
        var data = {
            id: id
        };

        this.API.all('delete-question').post(data).then((response) => {
            this.ToastService.show('question delete successfully');
    });
        this.getQuestions();
    }
}

export const QuestionCWComponent = {
    templateUrl: './views/app/components/question-CW/question-CW.component.html',
    controller: QuestionCWController,
    controllerAs: 'vm',
    bindings: {}
}
