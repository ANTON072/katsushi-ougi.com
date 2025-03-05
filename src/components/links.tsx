import { LinkIcon } from '@heroicons/react/24/outline';
import { FaGithub, FaXTwitter, FaFacebook, FaInstagram } from 'react-icons/fa6';

import SidebarTitle from './sidebar-title';

export default function Links() {
  return (
    <div className="grid gap-4">
      <SidebarTitle icon={<LinkIcon />}>links</SidebarTitle>
      <div className="link-container flex justify-center gap-4">
        <a
          href="https://github.com/"
          target="_blank"
          rel="noopener noreferrer"
          className="text-2xl"
        >
          <FaGithub />
        </a>
        <a
          href="https://twitter.com/"
          target="_blank"
          rel="noopener noreferrer"
          className="text-2xl"
        >
          <FaXTwitter />
        </a>
        <a
          href="https://facebook.com/"
          target="_blank"
          rel="noopener noreferrer"
          className="text-2xl"
        >
          <FaFacebook />
        </a>
        <a
          href="https://instagram.com/"
          target="_blank"
          rel="noopener noreferrer"
          className="text-2xl"
        >
          <FaInstagram />
        </a>
      </div>
    </div>
  );
}
