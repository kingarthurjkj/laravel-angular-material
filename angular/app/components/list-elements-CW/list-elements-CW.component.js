class ListElementsCWController{
    constructor(API, ToastService){
        'ngInject';

        this.API = API;
        this.ToastService = ToastService;
        this.elements = [];
    }

    $onInit(){
        this.getElements();
    }

    getElements(){
        this.API.all('list-elements').get('')
            .then((response) => {
            this.elements = response.data;
    });
    }
}

export const ListElementsCWComponent = {
    templateUrl: './views/app/components/list-elements-CW/list-elements-CW.component.html',
    controller: ListElementsCWController,
    controllerAs: 'vm',
    bindings: {}
}
