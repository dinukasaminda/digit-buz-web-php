import { Component } from '@angular/core';
import { Router, RouterOutlet } from '@angular/router';
import { AuthService } from './services/auth.service';
import { LoginService } from './services/login.service';
import { HttpClientModule } from '@angular/common/http';
@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, HttpClientModule],
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss',
  providers: [AuthService, LoginService],
})
export class AppComponent {
  title = 'angular-login-widget-01';
  constructor(private authService: AuthService, private router: Router) {}
  ngOnInit() {
    console.log('AppComponent.onInit()');
    this.authService.initCredentials();
    this.authService
      .isLoggedInt()
      .then((isLoggedInt) => {
        console.log('AppComponent.isLoggedInt()', isLoggedInt);
        if (!isLoggedInt) {
          this.router.navigate(['login']);
        }
      })
      .catch((error) => {});
  }
}
