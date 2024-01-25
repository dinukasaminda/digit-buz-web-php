import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root',
})
export class AuthService {
  accessToken?: string;
  constructor() {}
  initCredentials() {
    // get token fom local storage
    const token = localStorage.getItem('access-token');
    if (token) {
      this.accessToken = token;
    }
  }
  async isLoggedInt() {
    return !!this.accessToken;
  }
  setCurrentUser(user: any, token: string) {
    localStorage.setItem('access-token', token);
    // set user in local storage
    localStorage.setItem('user', JSON.stringify(user));
    this.accessToken = token;
  }
}
