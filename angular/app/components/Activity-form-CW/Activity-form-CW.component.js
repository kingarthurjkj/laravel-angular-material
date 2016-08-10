class ActivityFormCWController{
    constructor(API, ToastService) {
        'ngInject';

        this.API = API;
        this.ToastService = ToastService;
        this.activities = [];

    }
    $onInit(){

        this.getActivities();
    }

    getActivities(){
        this.API.all('list-activities').get('')
            .then((response) => {
            this.activities = response.data;
    });
    }

    submit(){
        var data = {
            name: this.name,
            description: this.description,
            options: this.options,
        };

        this.API.all('activities').post(data).then((response) => {
            this.ToastService.show('Activity added successfully');
    });
        this.getActivities();
    }

    delete(id){
        var data = {
            id: id
        };

        this.API.all('delete-activity').post(data).then((response) => {
            this.ToastService.show('Activity delete successfully');
    });
        this.getActivities();
    }

}

export const ActivityFormCWComponent = {
    templateUrl: './views/app/components/Activity-form-CW/Activity-form-CW.component.html',
    controller: ActivityFormCWController,
    controllerAs: 'vm',
    bindings: {}
}
