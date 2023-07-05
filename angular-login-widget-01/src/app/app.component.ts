import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss'],
})
export class AppComponent {
  title = 'angular-login-widget-01';
  var1 = 10;
  onUpdateCounter() {
    this.var1 += 1;
  }
}

// build
// ng build --configuration=production
