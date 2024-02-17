import { Routes } from '@angular/router';
import { LoginComponent } from './pages/login/login.component';
import { PostEditorComponent } from './pages/post-editor/post-editor.component';

export const routes: Routes = [
  { path: 'login', component: LoginComponent },
  { path: '', component: PostEditorComponent },
  { path: 'post-editor', component: PostEditorComponent },
];
