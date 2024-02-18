import { Component, Input } from '@angular/core';
import { PostElement } from '../../models/post-element';
import { CommonModule } from '@angular/common';
import { MatTooltipModule } from '@angular/material/tooltip';
import { MatIconModule } from '@angular/material/icon';
import { MatButtonModule } from '@angular/material/button';

@Component({
  selector: 'app-post-component',
  standalone: true,
  imports: [CommonModule, MatTooltipModule, MatIconModule, MatButtonModule],
  templateUrl: './post-component.component.html',
  styleUrl: './post-component.component.scss',
})
export class PostComponentComponent {
  @Input()
  PostComponent!: PostElement;

  @Input()
  EditMode: Boolean = true;

  handleClick() {
    // Handle the click event here
    console.log('Button clicked!: ' + this.PostComponent.id);
  }
}
