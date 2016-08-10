class EvluateFormCWController{
    constructor(API, ToastService){
        'ngInject';

        this.API = API;
        this.ToastService = ToastService;
        this.questions ="";
        this.id=1;
    }

    $onInit(){
        this.getQuestion();
    }

    getQuestion(){
        this.API.all('question/'+this.id).get('')
            .then((response) => {
            this.questions = response.data.questions.problem;
        this.id = response.data.questions.id;
    });
    }
    submit(){
        var data = {
            id: this.id,
            giver: this.giver,
            taker: this.taker,
            day: this.day,
            answer: this.answer,
        };

        this.API.all('evaluate').post(data).then((response) => {
            this.ToastService.show('Evaluate added successfully');
    });
        this.id = this.id+1;
        this.getQuestion();
    }
}

export const EvluateFormCWComponent = {
    templateUrl: './views/app/components/evluate-form-CW/evluate-form-CW.component.html',
    controller: EvluateFormCWController,
    controllerAs: 'vm',
    bindings: {}
}
