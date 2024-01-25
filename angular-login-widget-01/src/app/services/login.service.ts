import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class LoginService {
  private apiUrl = 'http://localhost:8000/api'; // Replace with your API endpoint

  constructor(private http: HttpClient) {}

  login(email: string, password: string): Observable<any> {
    // Replace 'your-login-endpoint' with your actual login API endpoint
    const loginUrl = `${this.apiUrl}/login`;

    return this.http.post(loginUrl, { email, password });
  }
}
