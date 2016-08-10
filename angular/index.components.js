import {QuestionCWComponent} from './app/components/question-CW/question-CW.component';
import {ListElementsCWComponent} from './app/components/list-elements-CW/list-elements-CW.component';
import {ListEvluateCWComponent} from './app/components/list-evluate-CW/list-evluate-CW.component';
import {EvluateFormCWComponent} from './app/components/evluate-form-CW/evluate-form-CW.component';
import {CreateGroupCWComponent} from './app/components/create-group-CW/create-group-CW.component';
import {CreateElementCWComponent} from './app/components/create-element-CW/create-element-CW.component';
import {NavFormCWComponent} from './app/components/nav-form-CW/nav-form-CW.component';
import {ActivityFormCWComponent} from './app/components/Activity-form-CW/Activity-form-CW.component';
import {CreatePostFormComponent} from './app/components/create_post_form/create_post_form.component';
import {AppHeaderComponent} from './app/components/app-header/app-header.component';
import {AppViewComponent} from './app/components/app-view/app-view.component';
import {AppShellComponent} from './app/components/app-shell/app-shell.component';
import {ResetPasswordComponent} from './app/components/reset-password/reset-password.component';
import {ForgotPasswordComponent} from './app/components/forgot-password/forgot-password.component';
import {LoginFormComponent} from './app/components/login-form/login-form.component';
import {RegisterFormComponent} from './app/components/register-form/register-form.component';


angular.module('app.components')
	.component('questionCW', QuestionCWComponent)
	.component('listElementsCW', ListElementsCWComponent)
	.component('listEvluateCW', ListEvluateCWComponent)
	.component('evluateFormCW', EvluateFormCWComponent)
	.component('createGroupCW', CreateGroupCWComponent)
	.component('createElementCW', CreateElementCWComponent)
	.component('navFormCW', NavFormCWComponent)
	.component('activityFormCW', ActivityFormCWComponent)
	.component('createPostForm', CreatePostFormComponent)
	.component('appHeader', AppHeaderComponent)
	.component('appView', AppViewComponent)
	.component('appShell', AppShellComponent)
	.component('resetPassword', ResetPasswordComponent)
	.component('forgotPassword', ForgotPasswordComponent)
	.component('loginForm', LoginFormComponent)
	.component('registerForm', RegisterFormComponent);