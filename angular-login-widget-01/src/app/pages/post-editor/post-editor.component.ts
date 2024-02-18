import { Component } from '@angular/core';
import { PostElement } from '../../models/post-element';
import { CommonModule } from '@angular/common';
import { PostComponentComponent } from '../post-component/post-component.component';

@Component({
  selector: 'app-post-editor',
  standalone: true,
  imports: [CommonModule, PostComponentComponent],
  templateUrl: './post-editor.component.html',
  styleUrl: './post-editor.component.scss',
})
export class PostEditorComponent {
  post: PostElement = {
    id: '1',
    alt_text: 'This is a post',
    content: 'This is the content of the post',
    content_type: 'h1',
    type: 'paragraph',
    elements: [
      {
        id: '2',
        alt_text: 'This is a title',
        content_type: 'text',
        content: 'This is the content of the title',
        type: 'text-row',
        elements: [
          {
            id: '4',
            alt_text: 'This is a paragraph',
            content:
              'https://plus.unsplash.com/premium_photo-1672997189753-ae8f3f7a0fa9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            content_type: 'image',
            type: 'paragraph',
          },
          {
            id: '5',
            alt_text: 'This is a paragraph',
            content: 'col 2',
            content_type: 'text',
            type: 'paragraph',
          },
          {
            id: '6',
            alt_text: 'This is a paragraph',
            content: 'col 3',
            content_type: 'text',
            type: 'paragraph',
          },
          {
            id: '6',
            alt_text: 'This is a paragraph',
            content: 'col 4',
            content_type: 'text',
            type: 'paragraph',
          },
        ],
      },
      {
        id: '4',
        alt_text: 'This is a heading 2',
        content: 'This is the content of the heading 2',
        content_type: 'h2',
        type: 'paragraph',
      },
      {
        id: '3',
        alt_text: 'This is a paragraph',
        content:
          '"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
        content_type: 'text',
        type: 'paragraph',
      },
      {
        id: '3',
        alt_text: 'This is a link',
        content: 'https://www.google.com',
        content_type: 'link',
        type: 'paragraph',
      },
      {
        id: '4',
        alt_text: 'This is a paragraph',
        content:
          'https://images.unsplash.com/photo-1598128558393-70ff21433be0?q=80&w=1989&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        content_type: 'image',
        type: 'paragraph',
      },
      {
        id: '5',
        alt_text: 'This is a paragraph',
        content: '',
        content_type: 'rich-text',
        type: 'rich-text',
        elements: [
          {
            id: '6',
            alt_text: 'This is a paragraph',
            content: 'On the other hand',
            content_type: 'stylish-text',
            type: 'paragraph',
            styles: {
              color: 'red',
              'font-size': '20px',
              'font-family': 'Arial',
            },
          },
          {
            id: '7',
            alt_text: 'This is a paragraph',
            content:
              'we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment',
            content_type: 'stylish-text',
            type: 'paragraph',
            styles: {
              'font-size': '12px',
              'font-weight': 'bold',
              'font-family': 'Arial',
            },
          },
          {
            id: '9',
            alt_text: 'This is a paragraph',
            content: 'text with a link inside it',
            content_type: 'text-link',
            type: 'paragraph',
            styles: {
              'font-size': '12px',
              'font-style': 'italic',
              'font-family': 'Arial',
            },
            options: {
              link: 'https://www.google.com',
            },
          },
          {
            id: '9',
            alt_text: 'This is a paragraph',
            content:
              'nd equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. ',
            content_type: 'stylish-text',
            type: 'paragraph',
            styles: {
              'font-size': '12px',
              'font-style': 'italic',
              'font-family': 'Arial',
            },
          },
        ],
      },
    ],
  };
}
// TODO  enhanced-paragraph type  with the following content:
// one paragraph with some text bold and some italic and some different colors and font sizes
// one paragraph with a link inside text
