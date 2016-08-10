class CreateGroupCWController{
    constructor(API, ToastService) {
        'ngInject';

        this.API = API;
        this.ToastService = ToastService;
        this.groups = [];

    }
    $onInit(){

        this.getGroups();
    }

    getGroups(){
        this.API.all('list-groups').get('')
            .then((response) => {
            this.groups = response.data;
    });
    }

    submit(){
        var data = {
            name: this.name,
            option: this.option,
        };

        this.API.all('groups').post(data).then((response) => {
            this.ToastService.show('Group added successfully');
    });
        this.getGroups();
    }

    delete(id){
        var data = {
            id: id
        };

        this.API.all('delete-group').post(data).then((response) => {
            this.ToastService.show('Group delete successfully');
    });
        this.getGroups();
    }
}

export const CreateGroupCWComponent = {
    templateUrl: './views/app/components/create-group-CW/create-group-CW.component.html',
    controller: CreateGroupCWController,
    controllerAs: 'vm',
    bindings: {}
}
