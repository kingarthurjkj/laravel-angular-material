class ListEvluateCWController{
    constructor(API, ToastService){
        'ngInject';

        this.API = API;
        this.ToastService = ToastService;
        this.evaluates = [];
    }

    $onInit(){
        this.getEvaluates();
    }

    getEvaluates(){
        this.API.all('list-evaluates').get('')
            .then((response) => {
            this.evaluates = response.data;
    });
    }
}

export const ListEvluateCWComponent = {
    templateUrl: './views/app/components/list-evluate-CW/list-evluate-CW.component.html',
    controller: ListEvluateCWController,
    controllerAs: 'vm',
    bindings: {}
}
