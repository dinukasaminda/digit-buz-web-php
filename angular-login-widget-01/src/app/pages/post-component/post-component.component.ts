import { Component, Input } from '@angular/core';
import { PostElement } from '../../models/post-element';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-post-component',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './post-component.component.html',
  styleUrl: './post-component.component.scss',
})
export class PostComponentComponent {
  @Input()
  postComponent!: PostElement;
}
