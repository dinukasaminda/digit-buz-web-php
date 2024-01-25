import { Component } from '@angular/core';
import { LoginService } from '../../services/login.service';
import { MatCardModule } from '@angular/material/card';
import { MatFormFieldModule } from '@angular/material/form-field';
import { FormsModule } from '@angular/forms';
import { MatInputModule } from '@angular/material/input';
import { MatButtonModule } from '@angular/material/button';
import { MatProgressBarModule } from '@angular/material/progress-bar';
import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';
import { AuthService } from '../../services/auth.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  standalone: true,
  imports: [
    MatCardModule,
    MatFormFieldModule,
    FormsModule,
    MatInputModule,
    MatButtonModule,
    MatProgressBarModule,
    CommonModule,
  ],
  templateUrl: './login.component.html',
  styleUrl: './login.component.scss',
})
export class LoginComponent {
  email: string = '';
  password: string = '';
  isLoading: boolean = false;
  constructor(
    private loginService: LoginService,
    private auth: AuthService,
    private router: Router
  ) {}

  onSubmit() {
    // Add your login service call here
    console.log('Email:', this.email);
    console.log('Password:', this.password);
    this.isLoading = true;

    this.loginService.login(this.email, this.password).subscribe(
      (response) => {
        // Handle successful login response here
        console.log('Login Successful:', response);
        this.isLoading = false;
        this.auth.setCurrentUser(response.user, response.token);
        this.router.navigate(['']);
      },
      (error) => {
        // Handle login error here
        console.error('Login Error:', error);
        this.isLoading = false;
      }
    );
  }
}
