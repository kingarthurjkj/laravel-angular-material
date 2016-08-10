class CreateElementCWController{
    constructor(API, ToastService){
        'ngInject';

        this.API = API;
        this.ToastService = ToastService;
    }

    submit(){
        var data = {
            titre: this.titre,
            description: this.description,
            lieu: this.lieu,
            photo: this.photo.base64,
        };

        this.API.all('create-element').post(data).then((response) => {
            this.ToastService.show('Élément ajouté !');
    });
    }
}

export const CreateElementCWComponent = {
    templateUrl: './views/app/components/create-element-CW/create-element-CW.component.html',
    controller: CreateElementCWController,
    controllerAs: 'vm',
    bindings: {}
}
